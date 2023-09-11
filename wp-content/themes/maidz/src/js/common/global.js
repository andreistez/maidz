let targetElement

export const getTargetElement = () => targetElement
export const setTargetElement = element => targetElement = element  // Export functions for body lock

export const numberWithDots = x => {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}