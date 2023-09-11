import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	swiperInit()
})

const swiperInit = () => {
	const swiper = new Swiper('.swiper', {
		centeredSlides: true,
		slidesPerView: 'auto',
		spaceBetween: 50,
		modules: [Pagination],

		pagination: {
			el: '.swiper-pagination',
			clickable: true
		},

		grabCursor: true,
		speed: 1400,

		autoplay: {
			delay: 2000,
		},
	})

	if (!swiper) return
}