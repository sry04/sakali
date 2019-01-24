
<template>
<div class="">
<section class="content">
  <div class="row">
     <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Spesifikasi</h3>
            </div>
            <form role="form"  @submit.prevent="updateSpesifikasi">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Nama Spesifikasi</label>
                      <input type="text" class="form-control" v-model="name"  placeholder="Masukan Nama Spesifikasi">
                    </div>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <router-link :to="{name: 'SpesifikasiProduct'}" class="btn btn-danger">
                  Cancel
                </router-link>
                <button type="submit" class="btn btn-primary">Edit</button>
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
  data() {
        return {
          name: ''
        }
      },
      created() {
        let uri = '../../api/spesifikasi/'+this.$route.params.id;
        axios.get(uri, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then((response) => {
            this.name = response.data.name;
        });
      },
      methods: {
        updateSpesifikasi() {
          let uri = '../../api/spesifikasi/'+this.$route.params.id;
          axios.put(uri, { name: this.name }, {
              headers: {
                  Authorization: 'Bearer ' + localStorage.getItem('token')
              }
          }).then((response) => {
            this.$router.push({name: 'SpesifikasiProduct'});
          });
        }
      }
}
</script>

<style lang="css">
</style>
