Ext.define('Shopware.apps.VjfStorelocator', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.VjfStorelocator',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
      'list.Window',
      'list.Store'
    ],

    models: [ 'Store' ],
    stores: [ 'Store' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
