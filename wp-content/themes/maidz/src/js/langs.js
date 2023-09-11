document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	showMenu()
})

const showMenu = () => {
	const buttons = document.querySelectorAll('.signup__lang')
	const menus = document.querySelectorAll('.hidden__menu')

	if (!buttons && !menu) return


	buttons.forEach(button => {
		button.addEventListener('click', () => {
			menus.forEach(menu => {
				if(!menu.classList.contains('clicked')) menu.classList.add('clicked')
				else menu.classList.remove('clicked')
			})

		})
	})
}