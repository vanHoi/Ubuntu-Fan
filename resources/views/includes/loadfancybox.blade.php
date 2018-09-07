<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="/css/fancybox/jquery.fancybox.css?v=2.1.5" media="screen"/>

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="/css/fancybox/jquery.fancybox-buttons.css?v=1.0.5"/>
<script type="text/javascript" src="/js/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="/css/fancybox/jquery.fancybox-thumbs.css?v=1.0.7"/>
<script type="text/javascript" src="/js/fancybox/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('.fancybox').fancybox({
            openEffect: 'elastic',
            openSpeed: 150,

            closeEffect: 'elastic',
            closeSpeed: 150,

            closeClick: true,

            helpers: {
                thumbs: {
                    width: 50,
                    height: 50
                },
                buttons: {},
                title: {
                    type: 'inside'
                }
            }
        });

    });
</script>