<template>
<div class="">
<section class="content">
  <div class="row">
     <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Tipe</h3>
            </div>
            <form role="form" v-on:submit.prevent="addTipe">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Nama Tipe</label>
                      <input type="text" class="form-control" v-model="name"  placeholder="Masukan Nama Tipe">
                    </div>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <router-link :to="{name: 'TipeProduct'}"  class="btn btn-danger">
                  Cancel
                </router-link>
                <button class="btn btn-primary" type="submit" >Add</button>
              </div>
            </form>
          </div>
        </div>
  </div>

</section>
</div>
</template>

<script>
export default {
  data(){
        return {
          name : '',
        }
    },
    methods: {
      addTipe(){
         // console.log(localStorage.getItem('token'));
        let uri = '../../api/tipe/add';
        axios.post(uri, {name : this.name}, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then((response) => {
          this.$router.push({name: 'TipeProduct'});
        });
      }
    }

}
</script>

<style lang="css">
</style>
