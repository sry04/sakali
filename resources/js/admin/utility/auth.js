/**
 * 
 * @param {*} token 
 */
function setTokenAdmin(token) {
  localStorage.setItem('token', token)
}

/**
 * 
 */
function revokeTokenAdmin() {
  return localStorage.removeItem('token')
}

/**
 * 
 */
function checkTokenAdmin() {
  var token = localStorage.getItem('token');
  if(!token) {
    return false
  }
  return true;
}

/**
 * 
 * @param {*} token 
 */
export function setToken(token) {
  return setTokenAdmin(token)
};

/**
 * 
 */
export function revokeToken() {
  return revokeTokenAdmin();
};

/**
 * 
 */
export function checkToken() {
  return checkTokenAdmin();
};