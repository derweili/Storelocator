Ext.define('Shopware.apps.VjfStorelocator.store.Store', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'VjfStorelocator'
        };
    },
    model: 'Shopware.apps.VjfStorelocator.model.Store'
});
