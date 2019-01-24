const sidebar = {
  menu: [
    {
      id: 'dashboard',
      title: 'Dashboard',
      route: {name: 'AdminDashboard'},
      icon: 'fa fa-dashboard',
      submenu: [
        {
          id: 'dashboard',
          title: 'Dashboard v1',
          route: {name: 'AdminDashboard'},
          icon: 'fa fa-circle-o',
          submenu: []
        }
      ]
    },
    {
      id: 'product',
      title: 'Produk',
      route: {name: 'AdminProduct'},
      icon: 'fa fa-tags',
      submenu:[]
    },
    {
      id: 'kategori',
      title: 'Kategori',
      route: {name: 'KategoriProduct'},
      icon: 'fa fa-tags',
      submenu:[]
    },
    {
      id: 'tipe',
      title: 'Tipe',
      route: {name: 'TipeProduct'},
      icon: 'fa fa-tags',
      submenu:[]
    },
    {
      id: 'spesifikasi',
      title: 'Spesifikasi',
      route: {name: 'SpesifikasiProduct'},
      icon: 'fa fa-gear',
      submenu:[]
    },
    {
      id: 'size',
      title: 'Size',
      route: {name: 'SizeProduct'},
      icon: 'fa fa-gear',
      submenu:[]
    },
    {
      id: 'color',
      title: 'Color',
      route: {name: 'ColorProduct'},
      icon: 'fa fa-gear',
      submenu:[]
    },
  ]
}

export default sidebar
