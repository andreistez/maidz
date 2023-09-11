import { isInScope, numberWithDots } from '../js/common/global'

const stepTime = 100

function outNum(elem) {
	let numElem = document.querySelectorAll(elem)

	numElem.forEach(elem => {
		let n = 0,
			step = parseInt(elem.dataset.step),
			limit = parseInt(elem.dataset.limit)

		let interval = setInterval(() => {
			n = n + step

			if (n >= limit) {
				elem.innerHTML = numberWithDots(limit)
				clearInterval(interval)
			} else {
				elem.innerHTML = numberWithDots(n)
			}
		}, stepTime)
	})
}

outNum('.hero__number-1')
outNum('.hero__number-2')

