@extends("layout.header_footer")
@section("content")

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <title>Login – Barjeel Geojit Financial Services L.L.C</title>
        <meta name="robots" content="noindex, nofollow">
        <link rel="alternate" type="application/rss+xml" title="Barjeel Geojit Financial Services L.L.C » Feed" href="https://mybarjeel.com/feed/">
        <link rel="alternate" type="application/rss+xml" title="Barjeel Geojit Financial Services L.L.C » Comments Feed" href="https://mybarjeel.com/comments/feed/">
        <script>
           window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mybarjeel.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}};
           /*! This file is auto-generated */
           !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
        </script><script src="https://mybarjeel.com/wp-includes/js/wp-emoji-release.min.js?ver=6.1.1" type="text/javascript" defer=""></script>
        <style>
           img.wp-smiley,
           img.emoji {
           display: inline !important;
           border: none !important;
           box-shadow: none !important;
           height: 1em !important;
           width: 1em !important;
           margin: 0 0.07em !important;
           vertical-align: -0.1em !important;
           background: none !important;
           padding: 0 !important;
           }
        </style>
        <link rel="stylesheet" id="jkit-elements-main-css" href="https://mybarjeel.com/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main.css?ver=2.4.2" media="all">
        <link rel="stylesheet" id="wp-block-library-css" href="https://mybarjeel.com/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1" media="all">
        <style id="wp-block-library-theme-inline-css">
           .wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:"0 0 1em 0"}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video{margin:0 0 1em}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
        </style>
        <link rel="stylesheet" id="classic-theme-styles-css" href="https://mybarjeel.com/wp-includes/css/classic-themes.min.css?ver=1" media="all">
        <style id="global-styles-inline-css">
           body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #FFFFFF;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--dark-gray: #28303D;--wp--preset--color--gray: #39414D;--wp--preset--color--green: #D1E4DD;--wp--preset--color--blue: #D1DFE4;--wp--preset--color--purple: #D1D1E4;--wp--preset--color--red: #E4D1D1;--wp--preset--color--orange: #E4DAD1;--wp--preset--color--yellow: #EEEADD;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--gradient--purple-to-yellow: linear-gradient(160deg, #D1D1E4 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-purple: linear-gradient(160deg, #EEEADD 0%, #D1D1E4 100%);--wp--preset--gradient--green-to-yellow: linear-gradient(160deg, #D1E4DD 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-green: linear-gradient(160deg, #EEEADD 0%, #D1E4DD 100%);--wp--preset--gradient--red-to-yellow: linear-gradient(160deg, #E4D1D1 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-red: linear-gradient(160deg, #EEEADD 0%, #E4D1D1 100%);--wp--preset--gradient--purple-to-red: linear-gradient(160deg, #D1D1E4 0%, #E4D1D1 100%);--wp--preset--gradient--red-to-purple: linear-gradient(160deg, #E4D1D1 0%, #D1D1E4 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 18px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 24px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-size--extra-small: 16px;--wp--preset--font-size--normal: 20px;--wp--preset--font-size--extra-large: 40px;--wp--preset--font-size--huge: 96px;--wp--preset--font-size--gigantic: 144px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
           .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
           :where(.wp-block-columns.is-layout-flex){gap: 2em;}
           .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
        </style>
        <link rel="stylesheet" id="hfe-style-css" href="https://mybarjeel.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.10" media="all">
        <link rel="stylesheet" id="elementor-icons-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.15.0" media="all">
        <link rel="stylesheet" id="elementor-frontend-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.6.5" media="all">
        <link rel="stylesheet" id="elementor-post-7-css" href="https://mybarjeel.com/wp-content/uploads/elementor/css/post-7.css?ver=1652602009" media="all">
        <link rel="stylesheet" id="elementor-pro-css" href="https://mybarjeel.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.7.0" media="all">
        <link rel="stylesheet" id="elementor-post-2247-css" href="https://mybarjeel.com/wp-content/uploads/elementor/css/post-2247.css?ver=1660915007" media="all">
        <link rel="stylesheet" id="font-awesome-5-all-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=1.3.5" media="all">
        <link rel="stylesheet" id="font-awesome-4-shim-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.6.5" media="all">
        <link rel="stylesheet" id="hfe-widgets-style-css" href="https://mybarjeel.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.10" media="all">
        <link rel="stylesheet" id="twenty-twenty-one-style-css" href="https://mybarjeel.com/wp-content/themes/twentytwentyone/style.css?ver=1.5" media="all">
        <style id="twenty-twenty-one-style-inline-css">
           :root{--global--color-background: #ffffff;--global--color-primary: #000;--global--color-secondary: #000;--button--color-background: #000;--button--color-text-hover: #000;}
        </style>
        <link rel="stylesheet" id="twenty-twenty-one-print-style-css" href="https://mybarjeel.com/wp-content/themes/twentytwentyone/assets/css/print.css?ver=1.5" media="print">
        <link rel="stylesheet" id="elementor-post-84-css" href="https://mybarjeel.com/wp-content/uploads/elementor/css/post-84.css?ver=1652602010" media="all">
        <link rel="stylesheet" id="elementor-post-86-css" href="https://mybarjeel.com/wp-content/uploads/elementor/css/post-86.css?ver=1660804000" media="all">
        <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="https://mybarjeel.com/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.5.9" media="all">
        <link rel="stylesheet" id="ekit-widget-styles-css" href="https://mybarjeel.com/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.5.9" media="all">
        <link rel="stylesheet" id="ekit-responsive-css" href="https://mybarjeel.com/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.5.9" media="all">
        <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Playfair+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CUbuntu%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.1" media="all">
        <link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3" media="all">
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
        <script src="https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.6.5" id="font-awesome-4-shim-js"></script>
        <script src="https://mybarjeel.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
        <script src="https://mybarjeel.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
        <link rel="https://api.w.org/" href="https://mybarjeel.com/wp-json/">
        <link rel="alternate" type="application/json" href="https://mybarjeel.com/wp-json/wp/v2/pages/2247">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mybarjeel.com/xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mybarjeel.com/wp-includes/wlwmanifest.xml">
        <meta name="generator" content="WordPress 6.1.1">
        <link rel="canonical" href="https://mybarjeel.com/login/">
        <link rel="shortlink" href="https://mybarjeel.com/?p=2247">
        <link rel="alternate" type="application/json+oembed" href="https://mybarjeel.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmybarjeel.com%2Flogin%2F">
        <link rel="alternate" type="text/xml+oembed" href="https://mybarjeel.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmybarjeel.com%2Flogin%2F&amp;format=xml">
        <style id="custom-background-css">
           body.custom-background { background-color: #ffffff; }
        </style>
        <style id="jeg_dynamic_css" type="text/css" data-type="jeg_custom-css"></style>
        <style id="wp-custom-css">
           .sub-menu-toggle {
           display : none;
           }
        </style>
    </head>

    <div data-elementor-type="wp-page" data-elementor-id="2247" class="elementor elementor-2247">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-46bcb402 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="46bcb402" data-element_type="section">
           <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5362093e" data-id="5362093e" data-element_type="column">
                 <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6cdfd871 elementor-widget elementor-widget-image" data-id="6cdfd871" data-element_type="widget" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                          <img decoding="async" src="https://mybarjeel.com/wp-content/uploads/2021/12/login.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://mybarjeel.com/wp-content/uploads/2021/12/login.png 800w, https://mybarjeel.com/wp-content/uploads/2021/12/login-300x224.png 300w, https://mybarjeel.com/wp-content/uploads/2021/12/login-768x572.png 768w" sizes="(max-width: 750px) 100vw, 750px" style="width:100%;height:74.5%;max-width:800px" width="750" height="559">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7ee84d5d" data-id="7ee84d5d" data-element_type="column">
                 <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-329434c3 elementor-widget elementor-widget-heading" data-id="329434c3" data-element_type="widget" data-widget_type="heading.default">
                       <div class="elementor-widget-container">
                          <style>/*! elementor - v3.6.5 - 27-04-2022 */
                             .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                          </style>
                          <h3 class="elementor-heading-title elementor-size-default">Login</h3>
                       </div>
                    </div>
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-94228b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="94228b8" data-element_type="section">
                       <div class="elementor-container elementor-column-gap-default">
                          <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f6877c1" data-id="f6877c1" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6c39193 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="6c39193" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                                   <div class="elementor-widget-container">
                                      <div class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_2247_2_63ca2f98280f6">
                                         <div class="jkit-icon-box-wrapper hover-from-left">
                                            <div class="icon-box icon-box-header elementor-animation-">
                                               <div class="icon style-color"><i class='fas fa-user-friends' style='font-size:48px'></i></div>
                                            </div>
                                            <div class="icon-box icon-box-body">
                                               <h2 class="title">Customer Care </h2>
                                               <div class="icon-box-button ">
                                                  <div class="btn-wrapper icon-position-before">
                                                     <a href="{{route('login.customer')}}" class="icon-box-link">Sign In</a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0ea796d" data-id="0ea796d" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3c87e90 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="3c87e90" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                                   <div class="elementor-widget-container">
                                      <div class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_2247_3_63ca2f982ae91">
                                         <div class="jkit-icon-box-wrapper hover-from-left">
                                            <div class="icon-box icon-box-header elementor-animation-">
                                               <div class="icon style-color"><i class='fas fa-file-invoice-dollar' style='font-size:36px'></i></div>
                                            </div>
                                            <div class="icon-box icon-box-body">
                                               <h2 class="title">DGCX </h2>
                                               <div class="icon-box-button ">
                                                  <div class="btn-wrapper icon-position-before">
                                                     <a href="{{route('login.dgcx')}}" class="icon-box-link">Sign In</a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c909f10" data-id="c909f10" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-8500d0f jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="8500d0f" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                                   <div class="elementor-widget-container">
                                      <div class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_2247_4_63ca2f982da42">
                                         <div class="jkit-icon-box-wrapper hover-from-left">
                                            <div class="icon-box icon-box-header elementor-animation-">
                                               <div class="icon style-color"><i class="fa fa-line-chart"></I></div>
                                            </div>
                                            <div class="icon-box icon-box-body">
                                               <h2 class="title">Trade</h2>
                                               <div class="icon-box-button ">
                                                  <div class="btn-wrapper icon-position-before">
                                                     <a href="{{route('login.trade')}}" class="icon-box-link">Sign In</a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                 </div>
              </div>
           </div>
        </section>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.body.classList.remove("no-js");</script>	<script>
        if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
            document.body.classList.add( 'is-IE' );
        }
    </script>
    <script id='twenty-twenty-one-ie11-polyfills-js-after'>
        ( Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach ) || document.write( '<script src="https://mybarjeel.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=1.5"></scr' + 'ipt>' );
    </script>
    <script src='https://mybarjeel.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=1.5' id='twenty-twenty-one-responsive-embeds-script-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.5.9' id='elementskit-framework-js-frontend-js'></script>
    <script id='elementskit-framework-js-frontend-js-after'>
        var elementskit = {
                resturl: 'https://mybarjeel.com/wp-json/elementskit/v1/',
            }


    </script>
    <script src='https://mybarjeel.com/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=2.5.9' id='datatables-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.5.9' id='ekit-widget-scripts-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.5' id='elementor-webpack-runtime-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.5' id='elementor-frontend-modules-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script src='https://mybarjeel.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
    <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.6.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/mybarjeel.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2247,"title":"Login%20%E2%80%93%20Barjeel%20Geojit%20Financial%20Services%20L.L.C","excerpt":"","featuredImage":false}};
    </script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.5' id='elementor-frontend-js'></script>
    <script id='elementor-frontend-js-after'>
        var jkit_ajax_url = "https://mybarjeel.com/?jkit-ajax-request=jkit_elements", jkit_nonce = "577d53dcaa";
    </script>
    <script src='https://mybarjeel.com/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js?ver=2.4.2' id='jkit-sticky-element-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.10' id='hfe-frontend-js-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.7.0' id='elementor-pro-webpack-runtime-js'></script>
    <script src='https://mybarjeel.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
    <script src='https://mybarjeel.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script src='https://mybarjeel.com/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
    <script src='https://mybarjeel.com/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
    <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
    </script>
    <script id='elementor-pro-frontend-js-before'>
        var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/mybarjeel.com\/wp-admin\/admin-ajax.php","nonce":"3e27dade34","urls":{"assets":"https:\/\/mybarjeel.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/mybarjeel.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/mybarjeel.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
    </script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.7.0' id='elementor-pro-frontend-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.7.0' id='pro-elements-handlers-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js?ver=2.5.9' id='animate-circle-js'></script>
    <script id='elementskit-elementor-js-extra'>
        var ekit_config = {"ajaxurl":"https:\/\/mybarjeel.com\/wp-admin\/admin-ajax.php","nonce":"6d4ce97fcc"};
    </script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.5.9' id='elementskit-elementor-js'></script>
    <script src='https://mybarjeel.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=2.5.9' id='swiper-js'></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
    </script>

@endsection


