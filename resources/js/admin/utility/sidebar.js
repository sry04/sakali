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
  ]
}

export default sidebar
