export default {
  /**
   * 
   * @param {*} url 
   * @param {*} object 
   */
  api(url, object) {
    let options = Object.assign(object)
    return new Promise((resolve, reject) => {
      return fetch(url, options).then((res) => {
        console.log(res)
        return res.json()
      }).then(res => {
        resolve(res)
        return res
      }).catch((err) => {
        reject(err)
        return err
      });
    });
  },
  
}