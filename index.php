<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first 3d_Project1</title>
		<style>
			body { margin: 0; }
			canvas {width: 100%; height: 100%;}
		</style>
		<script src="js/three.js"></script>
		<script src="https://82mou.github.io/threejs/js/OrbitControls.js"></script>
		
		
</head>
	<body>
		 <script type="text/javascript">
		//scene create code
			const scene = new THREE.Scene(); 
	   //Real life camera create code
			const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );   

			const renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );
			

             //addview port
              window.addEventListener('resize', function()
              {
              	const width = window.innerWidth;
              	const height = window.innerHeight;
              	renderer.setSize(weight,height );
              	camera.aspect = width / height;
              	camera.animateProjectMatrix();

              }	)	
              
             const controls = new THREE.OrbitControls( camera, renderer.domElement );	
          
             //create shape//
			 const geometry = new THREE.BoxGeometry(1,1,1);
			 //create material and color //
			 const material = new THREE.MeshBasicMaterial( {color: 0x00FF00, wireframe: true } );
			 const cube = new THREE.Mesh( geometry, material );
			scene.add( cube ); 
			         /*const geometry = new THREE.PlaneGeometry( 1, 1 );
                     const material = new THREE.MeshBasicMaterial( {color: 0xffff00, side: THREE.DoubleSide} );
                     const plane = new THREE.Mesh( geometry, material );
                     scene.add( plane );*/
             
			camera.position.z = 5;

			function animate() {
				requestAnimationFrame( animate );

				cube.rotation.x += 0.01;
				cube.rotation.y += 0.01;

				renderer.render( scene, camera );
			};

			animate();
		</script>
	</body>
</html> 