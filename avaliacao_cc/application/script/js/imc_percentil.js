function percentil(sexo,idade,imc){
	var res;
	
	if(sexo==1){
		switch(idade){
			case 0:
				if(imc < 10.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 11.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 14.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 16.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 18.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 18.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 1:
				if(imc < 11.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 17.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 19.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 19.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 2:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 3:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.8){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 4:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 5:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.4){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.4){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 6:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 7:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 8:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.4){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.4){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 9:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.3){ //P99 --> Sobreepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 10:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.6){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.9){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 11:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.8){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 12:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.3){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 13:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 14:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 15:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 16:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.1){ //P97 --> Risco de Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.2){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.2){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 17:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.6){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.9){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 18:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.8){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 19:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.7){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 20:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 21:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 22:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 23:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 24:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.7){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 25:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 26:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 27:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 28:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 29:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 30:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.4){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.4){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 31:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;		
			case 32:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 33:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.2){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.2){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 34:
			case 35:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.2){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.2){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 36:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 37:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 38:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 39:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 40:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade Grave';
									}
				break;
			case 41:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 42:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 43:
			case 44:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 45:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 46:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 47:
			case 48:
			case 49:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 50:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 51:	
			case 52:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 53:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 54:
			case 55:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.2){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.2){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 56:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 57:
			case 58:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 59:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.4){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.4){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;																																																						
			case 60:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 61:
			case 62:
			case 63:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 64:
			case 65:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 66:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 67:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 68:
			case 69:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 70:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 71:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;		
			case 72:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 20.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 20.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 73:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 74:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 75:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 76:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 77:
			case 78:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 79:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 80:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 81:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 82:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 83:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 84:
			case 85:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 86:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 87:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 88:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 89:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 90:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 91:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 92:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 93:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 94:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 95:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 96:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 97:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 98:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 99:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 100:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 101:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 102:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 103:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 104:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 105:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 106:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 107:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 108:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 109:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 110:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 111:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 112:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 113:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 114:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 115:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 116:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 117:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 118:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 119:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 120:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 121:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 122:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 123:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 124:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 125:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 126:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 127:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 128:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 129:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 130:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 131:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 132:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 133:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 134:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 135:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 136:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 137:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 138:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 139:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 140:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 141:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;			
			case 142:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 143:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 144:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 145:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 146:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 147:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 148:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 149:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 150:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 151:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 152:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 153:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 154:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 155:
				if(imc < 13.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 156:
				if(imc < 13.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 157:
				if(imc < 13.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 158:
				if(imc < 13.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 159:
				if(imc < 13.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 160:
				if(imc < 13.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 161:
				if(imc < 13.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 162:
				if(imc < 13.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 163:
				if(imc < 14.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 164:
				if(imc < 14.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 165:
				if(imc < 14.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 166:
				if(imc < 14.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 167:
				if(imc < 14.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 168:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 169:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 170:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 171:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 172:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 173:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 174:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 175:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 176:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 177:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 178:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 179:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 180:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 181:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 182:
				if(imc < 14.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 183:
				if(imc < 14.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 184:
				if(imc < 14.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 185:
				if(imc < 14.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 186:
				if(imc < 14.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 187:
				if(imc < 14.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 188:
				if(imc < 14.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 189:
				if(imc < 14.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 190:
				if(imc < 14.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 191:
				if(imc < 15.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 192:
			case 193:
				if(imc < 15.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 194:
				if(imc < 15.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 195:
			case 196:
				if(imc < 15.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 197:
				if(imc < 15.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 198:
				if(imc < 15.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 199:
				if(imc < 15.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;																																																																																																																										
			case 200:
				if(imc < 15.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 201:
				if(imc < 15.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 202:
				if(imc < 15.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 203:
				if(imc < 15.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 204:
				if(imc < 15.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 205:
				if(imc < 15.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;		
			case 206:
				if(imc < 15.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 207:
				if(imc < 15.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 208:
				if(imc < 15.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 209:
				if(imc < 15.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 210:
				if(imc < 15.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 211:
				if(imc < 15.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 212:
				if(imc < 15.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 213:
				if(imc < 15.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 214:
				if(imc < 15.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 215:
				if(imc < 15.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 216:
				if(imc < 15.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 217:
			case 218:
				if(imc < 15.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 219:
			case 220:
				if(imc < 15.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 221:
				if(imc < 15.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 222:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 223:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 224:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 225:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 226:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 227:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 228:
				if(imc < 15.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 17.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;																						
		}
//FEMININO========================================================================================================================================			
	}else{
		switch(idade){	
			case 0:
				if(imc < 10.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 11.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 14.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 15.9){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 17.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 17.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 1:
				if(imc < 10.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 17.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 19.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 19.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 2:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.8){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.9){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.9){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 3:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 4:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.3){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.8){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 5:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.4){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.4){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 6:
			case 7:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.6){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 8:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 20.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.4){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.4){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 9:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.9){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 10:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.7){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 11:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 22.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 22.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 12:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 13:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.2){ //P97 --> Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.6){ //P99 --> Obesidade
									res = 'Sobrepeso';
								}else
									if(imc > 21.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade';
									}
				break;	
			case 14:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.7){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.1){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 15:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 19.0){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 16:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.8){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.2){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.2){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 17:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.7){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 18:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;	
			case 19:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.9){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.9){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 20:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 21:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 22:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 23:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 24:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 25:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 26:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 27:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 28:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 29:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 30:
			case 31:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 32:
			case 33:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 34:
			case 35:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 36:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 37:
			case 38:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 39:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 40:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.5){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.5){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 41:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 42:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 43:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 44:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.2){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.6){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.6){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 45:
			case 46:
			case 47:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.7){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.7){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 48:
			case 49:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.8){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.8){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 50:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.3){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.9){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.9){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 51:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.8){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 20.9){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 20.9){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 52:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 53:
			case 54:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.0){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.0){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 55:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.4){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 56:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.1){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.1){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 57:
			case 58:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.2){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.2){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 59:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.5){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;																																																			
			case 60:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Risco de Sobrepeso
								res = 'Risco de Sobrepeso';
							}else
								if(imc <= 21.3){ //P99 --> Sobrepeso
									res = 'Sobrepeso';
								}else
									if(imc > 21.3){ // maior P99 --> Obesidade
										res = 'Obesidade';
									}
				break;
			case 61:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 62:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 16.9){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 63:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
					break;	
			case 64:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';							
						}else
							if(imc <= 18.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
					break;
			case 65:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 66:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 21.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 21.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 67:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 68:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 69:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 70:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 71:		
			case 72:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 18.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 73:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 74:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 75:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 76:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 77:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 22.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 22.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 78:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 79:
				if(imc < 11.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 80:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 81:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 82:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 83:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 84:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 85:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 86:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 23.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 23.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 87:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 88:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 89:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 90:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 91:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 12.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 92:
				if(imc < 11.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 19.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 93:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 24.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 24.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 94:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 95:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 96:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 97:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 98:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 17.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 99:
				if(imc < 11.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 100:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 25.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 25.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 101:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 102:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 103:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 104:
				if(imc < 11.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 105:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 106:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 20.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 26.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 26.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 107:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 108:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 109:
				if(imc < 12.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 110:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 111:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 112:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 27.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 27.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 113:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 114:
				if(imc < 12.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 115:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 116:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 117:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 18.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 118:
				if(imc < 12.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 21.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 119:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 28.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 28.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 120:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 121:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 122:
				if(imc < 12.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 123:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 124:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 125:
				if(imc < 12.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 29.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 29.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 126:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 127:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 128:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 129:
				if(imc < 12.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 13.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 22.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 130:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 131:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 19.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 30.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 30.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 132:
				if(imc < 12.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 133:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 134:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 135:
				if(imc < 12.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 136:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 137:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 138:
				if(imc < 12.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 31.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 31.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 139:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 23.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 140:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 141:
				if(imc < 12.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;			
			case 142:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 143:
				if(imc < 13.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 144:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 20.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 145:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 32.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 32.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 146:
				if(imc < 13.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 147:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 148:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 149:
				if(imc < 13.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 24.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 150:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 151:
				if(imc < 13.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 152:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 14.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 33.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 33.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 153:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 154:
				if(imc < 13.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 155:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 156:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 21.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 157:
				if(imc < 13.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 158:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 159:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 25.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 160:
				if(imc < 13.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 161:
				if(imc < 13.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 34.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 34.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 162:
				if(imc < 13.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 163:
				if(imc < 13.7){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 164:
				if(imc < 13.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 165:
				if(imc < 13.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 166:
				if(imc < 13.8){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 167:
				if(imc < 13.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 168:
				if(imc < 13.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 169:
				if(imc < 13.9){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 22.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 170:
				if(imc < 14.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 171:
				if(imc < 14.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 26.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 172:
				if(imc < 14.0){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 35.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 35.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 173:
				if(imc < 14.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.8){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 174:
				if(imc < 14.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 175:
				if(imc < 14.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 176:
				if(imc < 14.1){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 15.9){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 177:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.2){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.2){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;	
			case 178:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 179:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.0){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.3){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.3){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 180:
				if(imc < 14.2){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.4){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.4){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 181:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 182:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.1){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.5){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.5){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 183:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 184:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.6){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.6){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 185:
				if(imc < 14.3){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 23.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 186:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.2){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 27.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 187:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.7){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.7){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 188:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 189:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 190:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.3){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.1){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.8){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.8){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 191:
				if(imc < 14.4){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 192:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.2){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 193:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.2){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 194:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.3){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 195:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.4){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.3){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 196:
			case 197:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.4){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 198:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.4){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 199:																																																																																																																								
			case 200:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.5){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 201:
				if(imc < 14.5){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.5){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.5){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 202:
			case 203:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.6){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 204:
			case 205:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.6){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;		
			case 206:
			case 207:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.7){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 208:
			case 209:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.6){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.7){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 210:
			case 211:
			case 212:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.8){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 213:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.1){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.1){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 214:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.8){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 215:
			case 216:
			case 217:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 24.9){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 218:
			case 219:
			case 220:
			case 221:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 28.9){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;
			case 222:
			case 223:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.0){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 37.0){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 37.0){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;					
			case 224:
			case 225:
			case 226:
			case 227:
			case 228:
				if(imc < 14.6){//P 0,1 --> Magreza Acentuada
					res = 'Magreza Acentuada';
				}else
					if(imc < 16.7){//P 3  --> Magreza
						res = 'Magreza';
					}else
						if(imc <= 25.1){ //P85 --> Eutrofia
							res = 'Eutrofia';
						}else
							if(imc <= 29.0){ //P97 --> Sobrepeso
								res = 'Sobrepeso';
							}else
								if(imc <= 36.9){ //P99 --> Obesidade
									res = 'Obesidade';
								}else
									if(imc > 36.9){ // maior P99 --> Obesidade Grave
										res = 'Obesidade Grave';
									}
				break;																						
			default:
				res = 'Idade errada!';
		}
	}
	return(res);
}