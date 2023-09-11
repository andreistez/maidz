const pathSrc   = './src'
const pathDest  = './static'

/**
 * ! IMPORTANT - Change pathRoot value to your local domain name.
 */
const pathRoot = 'maidz.test/'

export default {
	root	: pathRoot,

	php	: {
		src	: '**/*.php'
	},

	scss	: {
		src		: pathSrc + '/scss/main.scss',
		watch	: pathSrc + '/scss/**/*.scss',
		dest	: pathDest + '/css'
	},

	scssPages	: {
		src		: pathSrc + '/scss/pages/*.scss',
		watch	: pathSrc + '/scss/pages/**/*.scss',
		dest	: pathDest + '/css/pages'
	},

	scssSections: {
		src		: pathSrc + '/scss/flexible-sections/*.scss',
		watch	: pathSrc + '/scss/flexible-sections/**/*.scss',
		dest	: pathDest + '/css/flexible-sections'
	},

	js		: {
		src		: [pathSrc + '/js/main.js', pathSrc + '/js/pages/**/*.js'],
		watch	: pathSrc + '/js/**/*.js',
		dest	: pathDest + '/js'
	},

	img		: {
		src		: pathSrc + '/img/**/*.{png,jpg,jpeg,gif,svg}',
		watch	: pathSrc + '/img/**/*.{png,jpg,jpeg,gif,svg}',
		dest	: pathDest + '/img'
	},

	fonts	: {
		src		: pathSrc + '/fonts/**/*',
		watch	: pathSrc + '/fonts/**/*',
		dest	: pathDest + '/fonts'
	},

	del		: {
		clean	: [
			`${pathDest}/js/**/*`,
			`${pathDest}/scss/**/*`,
			`${pathDest}/img/**/*`,
			`${pathDest}/fonts/**/*`
		]
	}
}