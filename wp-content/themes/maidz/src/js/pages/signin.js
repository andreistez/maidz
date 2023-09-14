import { submitAuthForm } from '../common/global'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	submitAuthForm( '#form-login', 'maidz_ajax_login' )
} )