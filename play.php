
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>alraqi-tv</title> 
    <link rel="icon" href="https://alraqi-tv.com/logo/alraqi-tv.png"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style> 
        body { 
            margin: 0; 
        } 

        .jwplayer { 
            position: absolute !important; 
        } 

        .jwplayer.jw-flag-aspect-mode { 
            min-height: 100%; 
            max-height: 100%; 
        } 

        .jw-logo-container { 
            position: absolute; 
            top: 2%; 
            right: 55%; 
        } 
    </style> 
</head> 
<body> 
    <div id="jwplayerDiv"></div> 
    <script src="https://libraries.alraqi-tv.com/jwplayer.js"></script> 
    <script type="text/javascript"> 
        // تمرير الرابط والبيانات إلى جافاسكريبت
        var config = {
            file: "",
            drm: {
                clearkey: {
                    keyId: "0a7934dddc3136a6922584b96c3fd1e5",
                    key: "676e6d1dd00bfbe266003efaf0e3aa02"
                }
            }
        };

        // إعداد مشغل JWPlayer
        jwplayer("jwplayerDiv").setup({ 
            file: config.file, 
            position: 'bottom', 
            autostart: true, 
            stretching: "", 
            width: "100%", 
            type: "dash", 
            volume: "100", 
            mute: false, 
            pipIcon: "true", 
            castIcon: "true", 
            title: "alraqi-CONNECT",
            captions: { color: '#febc11', fontSize: '25%', backgroundOpacity: 80 },
            abouttext: 'ATR-TV',
            aboutlink: 'https://alraqi-tv.com/DRM',
            sharing: {
                sites: ['facebook', 'twitter', 'tumblr', 'email', 'linkedin', 'pinterest', { icon: 'https://alraqi-tv.com/assets/ico/jwicon.png', src: 'https://alraqi-tv.com/DRM/?', label: 'JW-DRM' }]
            },
            skin: {
                "controlbar": {
                "background": "rgb(0,0,0,0)",
                "icons": "#ff5722",
                "iconsActive": "#FFFFFF",
                "text": "#ff5722"
            },
                "menus": {
                "background": "rgb(0,0,0,5)",
                "text": "rgb(255,255,255,0.8)",
                "textActive": "#FFFFFF"
            },
                "timeslider": {
                "progress": "#ff5722",
                "rail": "rgb(255,87,34)"
            },
                "tooltips": {
                "background": "#FFFFFF",
                "text": "#000000"
                 }
            },
            cast: {
                appid: 'com.instantbits.cast.webvideo',
                interceptCast: 'true',
            },
            logo: { 
                file: "", 
                hide: false, 
                position: "bottom-right",
                margin: "150",
                height: "25", 
            }, 
            drm: { 
                clearkey: { 
                    keyId: config.drm.clearkey.keyId, 
                    key: config.drm.clearkey.key 
                } 
            } 
        }); 
    </script> 
</body> 
</html>
