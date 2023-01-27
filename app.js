	
	function crear_ws(par){
		let ws=new WebSocket("wss://stream.binance.com:9443/ws/"+par+"@trade");
		return ws;
	}
	
	function mostrar_precio(html_tag,data){
		let data_ws = JSON.parse(data);
		let precio_cripto= parseFloat(data_ws.p).toFixed(2)
		html_tag.innerText = precio_cripto ;
		return precio_cripto;
	}
	//Polkadot
	let ws_dot = crear_ws("dotbusd");
    let precio_cripto_html = document.getElementById('polkadot');
	let last_price=null;
    ws_dot.onmessage =(event) =>{
		let precio_dot= mostrar_precio(precio_cripto_html,event.data);
		precio_cripto_html.style.color = !last_price || last_price===precio_dot ? 'black': precio_dot>last_price? 'green': 'red';
		last_price=precio_dot;
    }

	//Bitcoin
    let ws_btc = crear_ws("btcbusd");
    let precio_btc_html = document.getElementById('bitcoin');
	let ultimo_btc=null;
    ws_btc.onmessage =(event) =>{
	   let precio_btc= mostrar_precio(precio_btc_html,event.data);
	   precio_btc_html.style.color = !ultimo_btc || ultimo_btc===precio_btc ? 'black': precio_btc>ultimo_btc? 'green': 'red';
		ultimo_btc=precio_btc;
	}

	//Ethereum
	let ws_eth = crear_ws("ethbusd");
    let precio_eth_html = document.getElementById('ethereum');
   let ultimo_eth=null;
    ws_eth.onmessage =(event) =>{
		let precio_eth=mostrar_precio(precio_eth_html,event.data);
		precio_eth_html.style.color = !ultimo_eth || ultimo_eth===precio_eth ? 'black': precio_eth>ultimo_eth? 'green': 'red';
		ultimo_eth=precio_eth;
	}

	//Cardano
	let ws_ada = crear_ws("adabusd");
    let precio_ada_html = document.getElementById('cardano');
    let ultimo_ada=null;
    ws_ada.onmessage =(event) =>{
	   let  precio_ada=mostrar_precio(precio_ada_html,event.data);
	   precio_ada_html.style.color = !ultimo_ada || ultimo_ada===precio_ada ? 'black': precio_ada>ultimo_ada? 'green': 'red';
		ultimo_ada=precio_ada;
	}