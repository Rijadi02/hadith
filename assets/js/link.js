if (!!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime)) {
    document.getElementById("ext-link").setAttribute('href', "https://chrome.google.com/webstore/detail/one-hadith/kjkmpppbjhcllohbcjeclghdfhbcnkfa");
}
if (typeof InstallTrigger !== 'undefined') {
    document.getElementById("ext-link").setAttribute('href', "https://addons.mozilla.org/en-US/firefox/addon/one-hadith/");
}