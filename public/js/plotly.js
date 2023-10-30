d3.csv("../Temperatura.csv", function(err, rows){

  function unpack(rows, key) {
  return rows.map(function(row) { return row[key]; });
}

var temperaturaAmbiente = {
  type: "scatter",
  mode: "lines",
  name: 'Temperatura do Painel',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'AAPL.High'),
  line: {color: '#17BECF'}
}

var temperaturaPainel = {
  type: "scatter",
  mode: "lines",
  name: 'Temperatura Ambiente',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'AAPL.Low'),
  line: {color: '#7F7F7F'}
}

var tensaoDeSaida = {
  type: "scatter",
  mode: "lines",
  name: 'Tensão de Saída',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'tensao'),
  line: {color: '#7F7F7F'}
}

var correnteDeSaida = {
  type: "scatter",
  mode: "lines",
  name: 'Tensão de Saída',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'corrente'),
  line: {color: '#7F7F7F'}
}

var luminosidade = {
  type: "scatter",
  mode: "lines",
  name: 'Intensidade Luminosa (%)',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'luz'),
  line: {color: '#7F7F7F'}
}

var potenciaDeSaída = {
  type: "scatter",
  mode: "lines",
  name: 'Potência de Saída',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'potencia'),
  line: {color: '#7F7F7F'}
}

var eficiencia = {
  type: "scatter",
  mode: "lines",
  name: 'Eficiência',
  x: unpack(rows, 'Date'),
  y: unpack(rows, 'eficiencia'),
  line: {color: '#7F7F7F'}
}

var temperaturas = [temperaturaAmbiente,temperaturaPainel];
var dadosTensaoDeSaida = [tensaoDeSaida];
var dadosCorrenteDeSaida = [correnteDeSaida];
var dadosLuminosidade = [luminosidade];
var dadosPotenciaDeSaida = [potenciaDeSaída];
var dadosEficiencia = [eficiencia];

var layoutTemperaturas = {
  title: 'Temperatura do Ambiente e do Painel (ºC)',
  autosize: true,
  xaxis: {
    range: ['2023-09-01', '2023-10-04'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
    range: [22, 30],
    type: 'linear'
  }
};

var layoutTensao = {
  title: 'Tensão de Saída (V)',
  autosize: true,
  xaxis: {
    range: ['2023-09-01', '2023-10-04'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
    range: [22, 30],
    type: 'linear'
  }
};

var layoutCorrente = {
  title: 'Corrente de Saída (A)',
  autosize: true,
  xaxis: {
    range: ['2023-09-01', '2023-10-04'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
    range: [0, 2],
    type: 'linear'
  }
};

var layoutPotenciadeSaida = {
  title: 'Potência de Saída (W)',
  autosize: true,
  xaxis: {
    range: ['2023-09-01', '2023-10-04'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
    range: [0, 2],
    type: 'linear'
  }
};

var layoutLuminosidade = {
  title: 'Intensidade Luminosa (%)',
  autosize: true,
  xaxis: {
    range: ['2023-09-01', '2023-10-04'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
    range: [50, 100],
    type: 'linear'
  }
};

var layoutEficiencia = {
  title: 'Eficiência (%)',
  autosize: true,
  xaxis: {
    range: ['2023-09-01', '2023-10-04'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
    range: [50, 100],
    type: 'linear'
  }
};

Plotly.newPlot('temperaturaAmbienteGraph', temperaturas, layoutTemperaturas);
Plotly.newPlot('tensaoDeSaida', dadosTensaoDeSaida, layoutTensao);
Plotly.newPlot('correnteDeSaida', dadosCorrenteDeSaida, layoutCorrente);
Plotly.newPlot('intensidadeLuminosa', dadosLuminosidade, layoutLuminosidade);
Plotly.newPlot('potenciaDeSaida', dadosPotenciaDeSaida, layoutPotenciadeSaida);
Plotly.newPlot('eficiencia', dadosEficiencia, layoutEficiencia);


})
