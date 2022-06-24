var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'assets/';
elixir.config.publicPath = 'public/';

elixir.config.sourcemaps = false;

elixir(function(mix){
	mix.sass(['app.scss'],'public/css/styles.css').
	scripts([
				'../../node_modules/jquery/dist/jquery.js',
				'../../node_modules/bootstrap/dist/js/bootstrap.js',
				'scripts.js'
			],
			'public/js/scripts.js');
})
