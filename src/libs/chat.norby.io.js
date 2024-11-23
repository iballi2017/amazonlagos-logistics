
(function (w, d, s, o, f, js, fjs) {
    w[o] = w[o] || function () {
        (w[o].q = w[o].q || []).push(arguments)
    };
    js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
    js.id = o;
    js.src = f;
    js.async = 1;
    fjs.parentNode.insertBefore(js, fjs)
}
    (window, document, 'script', 'nw', 'https://chat.norby.io/widget'));
nw('init', {
    apiKey: '03bbe52f-a55d-4f96-bf73-9716e473dd22',
    serviceBaseUrl: 'https://api.norby.io',
    lang: 'en',
    languageList: ['AR', 'DA', 'DE', 'EE', 'EN', 'ES', 'FI', 'FR', 'IT', 'JA', 'NO', 'PL', 'PT', 'RU', 'SV', 'TR', 'UA', 'ZH'],
    mainColor: '#505D0C',
    popupBotAvatarColor: '#505D0C',
    multichat: true,
    botName: 'Bot',
    imageTransferEnabled: true,
    side: 'right',
    marginSideDesktop: 80,
    marginBottomDesktop: 48,
    marginSideMobile: 16,
    marginBottomMobile: 16
});