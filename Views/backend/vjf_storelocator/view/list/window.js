Ext.define('Shopware.apps.VjfStorelocator.view.list.Window', {

    extend: 'Shopware.window.Listing',
    alias: 'widget.store-list-window',
    height: 600,
    layout: 'fit',
    title: '{s name=window_title}Stores{/s}',

    configure: function() {
      return {
        listingGrid: 'Shopware.apps.VjfStorelocator.view.list.Store',
        listingStore: 'Shopware.apps.VjfStorelocator.store.Store'
      }
    },

});
