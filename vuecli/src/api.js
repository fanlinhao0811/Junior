import HttpApi from '@fenivana/http-api'

const api = new HttpApi({
	base: 'http://192.168.100.243:5051',
	responseHandler(res, body) {
		if (body.status === 200) {
			return body
		} else {
			throw body
		}
	}
})

export default api