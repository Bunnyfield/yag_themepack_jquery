####################################################
# Theme configuration root 
#
# @author Sebastian Helzle <sebastian@helzle.net>
# @package YAG
# @subpackage Typoscript
####################################################

plugin.tx_yag.settings.themes.gmaps < plugin.tx_yag.settings.themes.default

# Include General theme configuration
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yag_themepack_jquery/Configuration/TypoScript/Themes/Gmaps/General.ts">
