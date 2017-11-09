var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/math', function(req, res) {
	res.render('math', { title: 'Math' });
});

router.get('/results', function(req, res) {
	res.render('results', { title: 'Results' });
});

module.exports = router;
