<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Ukuran Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertSize'}" class="pull-right btn btn-info">
            Tambah Ukuran
          </router-link>
        </div>

        <div class="box-body">
          <vuetable ref="vuetable"
            api-url="../../api/size"  
            :fields="['id', 'name']"
            data-path=""
            pagination-path=""
          ></vuetable>
        </div>

      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</div>
</template>

<script>
import Vuetable from 'vuetable-2'
export default {
      // data() {
      //   return {
      //     httpOptions: { headers: { Authorization: 'Bearer ' + localStorage.getItem('token') } },
      //   }
      // },
    //   created() {
    //     axios.get('../../api/size', {
    //         headers: {
    //             Authorization: 'Bearer ' + localStorage.getItem('token')
    //         }
    //     }).then(response => {
    //     this.sizes = response.data.data;
    //   });
    // },
    methods: {
      deleteSize(id)
      {
          let uri = '../../api/size/'+id;
          axios.delete(uri, {
              headers: {
                  Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
          this.sizes.splice(this.sizes.indexOf(id), 1);
        });
      }
    },
  components: {
   Vuetable
  }
  }
</script>

<style lang="css">
</style>
