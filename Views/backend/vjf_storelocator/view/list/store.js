Ext.define('Shopware.apps.VjfStorelocator.view.list.Store', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.store-listing-grid',
    region: 'center',
    configure: function() {
        return {
            detailWindow: 'Shopware.apps.VjfStorelocator.view.detail.Window'
        };
    }
});
