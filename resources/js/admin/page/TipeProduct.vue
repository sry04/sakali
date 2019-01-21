<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Tipe Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertTipe'}" class="pull-right btn btn-info">
            Tambah Tipe
          </router-link>
        </div>

        <div class="box-body">
          <table id="product" class="table table-responsive table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Tipe</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="tipe in tipes" :key="tipe.id">
                <td>{{ tipe.id }}</td>
                <td>{{ tipe.name}}</td>
                <td>
                  <router-link :to="{name: 'EditTipe', params: { id: tipe.id }}" class="btn text-black">
                    <i class="fa fa-edit"></i>
                  </router-link>
                  <a @click.prevent="deleteTipe(tipe.id)"class="btn text-black"><i class="fa fa-trash"></i></a>

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
          tipes: []
        }
      },
      created() {
        axios.get('../../api/tipe', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
        this.tipes = response.data.data;
      });
    },
    methods: {
      deleteTipe(id)
      {
        let uri = '../../api/tipe/'+id;
        axios.delete(uri, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
          this.tipes.splice(this.tipes.indexOf(id), 1);
        });
      }
    }
  }
</script>

<style lang="css">
</style>
