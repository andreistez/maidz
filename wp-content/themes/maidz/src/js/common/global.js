export const ajaxUrl = window.wpData.ajaxUrl
let isAjaxWorking = false,
	targetElement

export const getTargetElement = () => targetElement
export const setTargetElement = element => targetElement = element  // Export functions for body lock

export const numberWithDots = x => {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

/**
 * Check if AJAX is working now.
 *
 * @returns {Boolean}
 */
export let checkAjaxWorkingStatus = () => isAjaxWorking

/**
 * Set AJAX status.
 *
 * @param {Boolean} status
 */
export let setAjaxWorkingStatus = status => isAjaxWorking = status

/**
 * Custom AJAX request.
 *
 * @param	{Object}	formData	Data for fetch body.
 * @returns	{Array}					Response data array.
 */
export let customAjaxRequest = async formData => {
	let response = await fetch( ajaxUrl, {
		method	: 'post',
		body	: formData
	} )

	return await response.json()
}

/**
 * Submit Authorization forms via AJAX.
 *
 * @param {String}	formSelector	Specific form CSS-selector.
 * @param {String}	action			AJAX action name.
 */
export const submitAuthForm = ( formSelector, action ) => {
	const form = document.querySelector( formSelector )

	if( ! form ) return

	form.addEventListener( 'submit', e => {
		e.preventDefault()

		if( checkAjaxWorkingStatus() ) return

		setAjaxWorkingStatus( true )

		const
			note		= form.querySelector( '.note' ),
			formData	= new FormData( form )

		if( note ) note.innerHTML = ''

		form.classList.add( 'disabled' )
		formData.append( 'action', action )

		// Check type of register form.
		if( action === 'maidz_ajax_register' ) formData.append( 'type', form.dataset.type )

		customAjaxRequest( formData ).then( res => {
			form.classList.remove( 'disabled' )

			if( res ){
				switch( res.success ){
					case true:
						if( res.data.redirect )
							setTimeout( () => window.location.href = res.data.redirect, 1000 )

						if( note ) note.innerHTML = res.data.msg

						form.reset()
						break

					case false:
						if( note ) note.innerHTML = res.data.msg
						break
				}
			}

			setAjaxWorkingStatus( false )
		} )
	} )
}