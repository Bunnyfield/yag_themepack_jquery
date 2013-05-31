
/*!
Google Maps integration for punkt.de websites
@author Sebastian Helzle (helzle@punkt.de)
*/

(function() {
  var __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  (function($) {
    var PtGoogleMap, defaultAutoCompleteOptions, defaultMapOptions, geocode, geocoder, librariesLoading, loadScript, loaderCallbacks, ptGoogleMaps, runCallbacks, selectedDestinationAddress;
    ptGoogleMaps = [];
    loaderCallbacks = [];
    librariesLoading = false;
    selectedDestinationAddress = '';
    geocoder = void 0;
    defaultMapOptions = {
      mapOptions: {
        zoom: 14
      },
      data: {},
      langCode: 'de',
      startAddress: '',
      dropAnimation: false,
      showCountry: false,
      showAllMarkers: true,
      showFirstMarkerOnStart: true,
      showRouteToLink: true,
      useAddressForRouteUrl: true,
      width: 400,
      height: 400,
      center: {
        lat: 49.02,
        lng: 8.4
      }
    };
    defaultAutoCompleteOptions = {
      langCode: 'de',
      placeChanged: void 0,
      autoComplete: {
        types: [],
        componentRestrictions: {}
      }
    };
    /*
      Map class
    */
    PtGoogleMap = (function() {

      function PtGoogleMap($mapObj, options) {
        var dataEntry, _i, _len, _ref,
          _this = this;
        this.$mapObj = $mapObj;
        this.options = options;
        this.showInfoWindow = __bind(this.showInfoWindow, this);
        this.createMapMarker = __bind(this.createMapMarker, this);
        this.showAllMarkers = __bind(this.showAllMarkers, this);
        this.showMarker = __bind(this.showMarker, this);
        this.infoWindow = void 0;
        this.markers = [];
        this.options.mapOptions = $.extend(true, {}, this.options.mapOptions, {
          center: new google.maps.LatLng(this.options.center.lat, this.options.center.lng),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        this.$mapObj.css({
          width: this.options.width,
          height: this.options.height
        });
        this.$mapObj.data('api', this);
        this.map = new google.maps.Map(this.$mapObj[0], this.options.mapOptions);
        _ref = this.options.data;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          dataEntry = _ref[_i];
          if (Math.abs(dataEntry.latitude) <= 90 && Math.abs(dataEntry.longitude) <= 180) {
            this.markers.push(this.createMapMarker(dataEntry));
          }
        }
        if (this.options.showAllMarkers && this.markers.length > 1) {
          this.showAllMarkers();
        }
        if (this.markers.length === 1) {
          this.map.setCenter(this.markers[0].position);
        }
        if (this.options.showFirstMarkerOnStart && this.markers.length) {
          this.showInfoWindow(null, this.markers[0]);
        }
        $(this.$mapObj).delegate('.routeToLink', 'click', function(e) {
          var start, startAddress;
          e.preventDefault();
          startAddress = typeof _this.options.startAddress === 'function' ? _this.options.startAddress() : _this.options.startAddress;
          start = encodeURI(startAddress);
          return window.open("https://maps.google.com/?saddr=" + start + "&daddr=" + selectedDestinationAddress);
        });
      }

      /*
          Show a single marker info window
      */

      PtGoogleMap.prototype.showMarker = function(id) {
        var marker, _i, _len, _ref;
        _ref = this.markers;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          marker = _ref[_i];
          if (marker.ptAdditionalData.dataId === id) {
            return this.showInfoWindow(null, marker);
          }
        }
      };

      /*
          Method for zooming the map to show all markers
      */

      PtGoogleMap.prototype.showAllMarkers = function() {
        var bounds, marker, _i, _len, _ref;
        bounds = new google.maps.LatLngBounds();
        _ref = this.markers;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          marker = _ref[_i];
          bounds.extend(marker.position);
        }
        return this.map.fitBounds(bounds);
      };

      /*
          Method for initializing a new map marker
      */

      PtGoogleMap.prototype.createMapMarker = function(markerData) {
        var marker, markerOptions,
          _this = this;
        markerOptions = {
          position: new google.maps.LatLng(markerData.latitude, markerData.longitude),
          map: this.map,
          title: markerData.title
        };
        if (this.options.dropAnimation) {
          markerOptions.animation = google.maps.Animation.DROP;
        }
        marker = new google.maps.Marker(markerOptions);
        marker.ptAdditionalData = markerData;
        google.maps.event.addListener(marker, 'click', function(e) {
          return _this.showInfoWindow(e, marker);
        });
        return marker;
      };

      /*
          Method for showing an info window
      */

      PtGoogleMap.prototype.showInfoWindow = function(e, marker) {
        var data, destination, infoHtml;
        if (!this.infoWindow) this.infoWindow = new google.maps.InfoWindow();
        data = marker.ptAdditionalData;
        destination = '';
        if (this.options.useAddressForRouteUrl) {
          destination += encodeURI("" + data.address + "," + data.zip + " " + data.city + "," + data.country);
        } else {
          destination += "" + data.latitude + "," + data.longitude;
        }
        selectedDestinationAddress = destination;
        infoHtml = ("<b>" + data.title + "</b><br>") + ("" + data.address + "<br>") + ("" + data.zip + " " + data.city + "<br>");
        if (this.options.showCountry) infoHtml += "" + data.country + "<br>";
        if (data.notice) infoHtml += "<p><i>" + data.notice + "</i></p>";
        if (this.options.showRouteToLink) {
          infoHtml += "<p><a class='routeToLink' href='#' target='_blank'>Route anzeigen</a></p>";
        }
        this.infoWindow.setContent(infoHtml);
        return this.infoWindow.open(this.map, marker);
      };

      return PtGoogleMap;

    })();
    /*
      Function for geocoding via javascript
    */
    geocode = function(address, callback) {
      if (!window.google) return;
      if (!geocoder) geocoder = new google.maps.Geocoder();
      return geocoder.geocode({
        address: address
      }, callback);
    };
    /*
      Function for loading the google maps api async
      Calls initializePTGoogleMap when script has been loaded
    */
    loadScript = function(options, callback) {
      if (!window.google) return;
      loaderCallbacks.push(callback);
      if (!librariesLoading) {
        if (google.maps) {
          return runCallbacks();
        } else {
          librariesLoading = true;
          return google.load('maps', '3.7', {
            'other_params': "sensor=false&libraries=places&language=" + options.langCode,
            'callback': function() {
              librariesLoading = false;
              return runCallbacks();
            }
          });
        }
      }
    };
    /*
      Function for calling all callbacks which were requested during loading of the libs
    */
    runCallbacks = function() {
      var loaderCallback, _results;
      loaderCallback = null;
      _results = [];
      while (loaderCallback = loaderCallbacks.pop()) {
        _results.push(loaderCallback());
      }
      return _results;
    };
    /*
      Register jQuery plugin
    */
    $.fn.ptGoogleMap = function(options, idx) {
      var $self;
      if (idx == null) idx = void 0;
      if (this.length > 1) {
        this.each(function() {
          return $(this).ptGoogleMap(options);
        });
        return this;
      }
      if (this.length === 0) return this;
      $self = $(this);
      if (typeof options === 'string') {
        switch (options) {
          case 'showMarker':
            $self.data('api').showMarker(idx);
        }
        return this;
      }
      options = $.extend(true, {}, defaultMapOptions, options);
      loadScript(options, function() {
        return ptGoogleMaps.push(new PtGoogleMap($self, options));
      });
      return this;
    };
    return $.fn.ptGoogleMapAutoComplete = function(options) {
      var $self;
      if (this.length > 1) {
        this.each(function() {
          return $(this).ptGoogleMapAutoComplete(options);
        });
        return this;
      }
      if (this.length === 0) return this;
      $self = $(this);
      options = $.extend(true, {}, defaultAutoCompleteOptions, options);
      loadScript(options, function() {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete($self[0], options.autoComplete);
        $self.data('api', {
          autocomplete: autocomplete,
          geocode: geocode
        });
        if (options.placeChanged) {
          return google.maps.event.addListener(autocomplete, 'place_changed', function() {
            return options.placeChanged(autocomplete.getPlace());
          });
        }
      });
      return this;
    };
  })(jQuery);

}).call(this);
