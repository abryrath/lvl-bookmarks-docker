import axios from 'axios';

let csrfToken: string = '';
const csrfField: HTMLMetaElement = document.querySelector('meta[name="csrf-token"]');
if (csrfField) {
    csrfToken = csrfField.content;
}

console.log('[api.ts] got csrfToken:', csrfToken);

let authToken: string = '';
const authField: HTMLMetaElement = document.querySelector('meta[name="auth-token"]');
if (authField) {
    authToken = authField.content;
}

const csrfHeaderName = 'X-CSRF-TOKEN';
const instance = axios.create({
    baseURL: '/api'
});
if (authToken) {
    instance.defaults.headers.common['Authorization'] = `Bearer ${authToken}`;
}
if (csrfToken) {
    instance.defaults.headers.post[csrfHeaderName] = csrfToken;
    instance.defaults.headers.put[csrfHeaderName] = csrfToken;
    instance.defaults.headers.patch[csrfHeaderName] = csrfToken;
    instance.defaults.headers.delete[csrfHeaderName] = csrfToken;
}

export default instance;
