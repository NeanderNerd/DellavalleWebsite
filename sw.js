'use strict';

(function() {
    var staticCacheName = 'static';
    var version = 'v1::';

    function updateStaticCache() {
        return cashes.open(version + staticCacheName).then(function (cashe) {
            return cashe.addAll([
                'css/style.css',
                ''
            ])
        })
    }
})