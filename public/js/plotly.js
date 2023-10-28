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

var temperaturas = [temperaturaAmbiente,temperaturaPainel];
var dadosTensaoDeSaida = [tensaoDeSaida];

var layoutTemperaturas = {
  title: 'Temperatura do Ambiente e do Painel',
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
  title: 'Tensão de Saída',
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

Plotly.newPlot('temperaturaAmbienteGraph', temperaturas, layoutTemperaturas);
Plotly.newPlot('tensaoDeSaida', dadosTensaoDeSaida, layoutTensao);
})
