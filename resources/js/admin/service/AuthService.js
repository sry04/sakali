import Service from './Service'
import qs from 'qs'

export default {
  /**
   * 
   * @param {*} form 
   */
  login (form) {
    const {payload} = form
    const url = '/api/auth/signin';
    const options = {
      method: 'POST',
      body: qs.stringify(payload),
      headers: new Headers({
        "Content-type": "application/x-www-form-urlencoded",
        "Accept": "application/json"
      })
    };
    return Service.api(url, options)
  }, 
     
  /**
   * 
   * @param {*} form 
   */
  register (form) {
    const {payload} = form
    const url = '/api/auth/register';
    const options = {
      method: 'POST',
      body: qs.stringify(payload),
      headers: new Headers({
        "Content-type": "application/x-www-form-urlencoded"
      })
    };
    return Service.api(url, options)
  }, 

  /**
   * 
   * @param {*} form 
   */
  forgot (form) {
    const {payload} = form
    const url = '/api/auth/password';
    const options = {
      method: 'POST',
      body: qs.stringify(payload),
      headers: new Headers({
        "Content-type": "application/x-www-form-urlencoded"
      })
    };
    return Service.api(url, options)
  }, 

  /**
   * 
   * @param {*} form 
   */
  reset (form) {
    const {payload} = form
    const url = '/api/auth/password/reset';
    const options = {
      method: 'POST',
      body: qs.stringify(payload),
      headers: new Headers({
        "Content-type": "application/x-www-form-urlencoded"
      })
    };
    return Service.api(url, options)
  },         
}