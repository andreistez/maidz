import { customAjaxRequest } from './global'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	logout()
} )

/**
 * AJAX logout.
 */
const logout = () => {
	const logoutLinks = document.querySelectorAll( '.logout' )

	if( ! logoutLinks.length ) return

	logoutLinks.forEach( link => {
		link.addEventListener( 'click', e => {
			e.preventDefault()

			link.classList.add( 'loading' )

			const formData = new FormData()

			formData.append( 'action', 'maidz_ajax_logout' )

			customAjaxRequest( formData ).then( res => {
				if( res ){
					switch( res.success ){
						case true:
							link.innerText 			= res.data.msg
							window.location.href 	= res.data.redirect
							break

						case false:
							console.error( res.data.msg )
							break
					}
				}

				setAjaxWorkingStatus( false )
			} )
		} )
	} )
}