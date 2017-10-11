Ext.define('Shopware.apps.VjfStorelocator.controller.Main', {
	extend: 'Ext.app.Controller',

	init: function() {
		var me = this;
		me.mainWindow = me.getView('list.Window').create({}).show();
	}
});
