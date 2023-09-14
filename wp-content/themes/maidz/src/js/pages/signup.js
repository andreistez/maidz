import { submitAuthForm } from '../common/global'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	submitAuthForm( '#form-register', 'maidz_ajax_register' )
} )