<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Spesifikasi Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertSpesifikasi'}" class="pull-right btn btn-info">
            Tambah Spesifikasi
          </router-link>
        </div>

        <div class="box-body">
          <table id="product" class="table table-responsive table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Spesifikasi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="spesifikasi in spesifications" :key="spesifikasi.id">
                <td>{{ spesifikasi.id }}</td>
                <td>{{ spesifikasi.name}}</td>
                <td>
                  <router-link :to="{name: 'EditSpesifikasi', params: { id: spesifikasi.id }}" class="btn text-black">
                    <i class="fa fa-edit"></i>
                  </router-link>
                  <a @click.prevent="deleteSpesifikasi(spesifikasi.id)"class="btn text-black"><i class="fa fa-trash"></i></a>

                </td>
            </tr>
            </tbody>
          </table>
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
export default {
      data() {
        return {
          spesifications: []
        }
      },
      created() {
        axios.get('../../api/spesifikasi', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
        this.spesifications = response.data.data;
      });
    },
    methods: {
      deleteSpesifikasi(id)
      {
        let uri = '../../api/spesifikasi/'+id;
        axios.delete(uri, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
          this.spesifications.splice(this.spesifications.indexOf(id), 1);
        });
      }
    }
  }
</script>

<style lang="css">
</style>
