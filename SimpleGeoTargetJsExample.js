// Alerts EU visitors to GDRP compliance
var euCountryCodes = ['AT', 'BE', 'BG', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IE', 'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE', 'GB'];
if (euCountryCodes.includes(window.geoTarget.countryCode)) {
    alert('Hi ' + window.geoTarget.country + '! Our company will comply with GDRP by 25 May 2018. To find out more visit: https://www.eugdpr.org/');
}
