Ext.define('Shopware.apps.VjfStorelocator.model.Store', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'VjfStorelocator'
        };
    },

    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string' },
        { name : 'type', type: 'string' },
        { name : 'rank', type: 'string' },
        { name : 'street', type: 'string', useNull: true },
        { name : 'zip', type: 'string', useNull: true },
        { name : 'city', type: 'string', useNull: true },
        { name : 'country', type: 'string', useNull: true },
        { name : 'latitude', type: 'decimal', useNull: true },
        { name : 'longitude', type: 'decimal', useNull: true }
      ]
});
