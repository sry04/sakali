<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Warna Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertColor'}" class="pull-right btn btn-info">
            Tambah Warna
          </router-link>
        </div>

        <div class="box-body">
          <table id="product" class="table table-responsive table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Warna</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="color in colors" :key="color.id">
                <td>{{ color.id }}</td>
                <td>{{ color.name}}</td>
                <td>{{ color.color}}</td>
                <td>
                  <router-link :to="{name: 'EditColor', params: { id: color.id }}" class="btn text-black">
                    <i class="fa fa-edit"></i>
                  </router-link>
                  <a @click.prevent="deleteColor(color.id)"class="btn text-black"><i class="fa fa-trash"></i></a>

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
          colors: []
        }
      },
      created() {
        axios.get('../../api/warna', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
        this.colors = response.data.data;
      });
    },
    methods: {
      deleteColor(id)
      {
        let uri = '../../api/warna/'+id;
        axios.delete(uri, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then(response => {
          this.colors.splice(this.colors.indexOf(id), 1);
        });
      }
    }
  }
</script>

<style lang="css">
</style>
