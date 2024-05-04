import 'package:flutter/material.dart';
import './questionario.dart';
import './resultado.dart';

void main() {
  runApp(PrimeiroAPP());
}

class PrimeiroAppState extends State<PrimeiroAPP> {
  final questoes = const [
    {
      'texto': 'Qual o melhor time do brasil?',
      'respostas': [
        {'texto': 'Corinthians', 'nota': 10},
        {'texto': 'Santos', 'nota': 3},
        {'texto': 'São Paulo', 'nota': 2},
        {'texto': 'Palmeiras', 'nota': 1},
        {'texto': 'Flamengo', 'nota': 0},
      ],
    },
    {
      'texto': 'Qual time não tem mundial?',
      'respostas': [
        {'texto': 'Corinthians', 'nota': 1},
        {'texto': 'Santos', 'nota': 3},
        {'texto': 'São Paulo', 'nota': 2},
        {'texto': 'Palmeiras', 'nota': 10},
      ],
    },
    {
      'texto': 'Qual o maior time do Mundo?',
      'respostas': [
        {'texto': 'Corinthians', 'nota': 10},
        {'texto': 'Santos', 'nota': 2},
        {'texto': 'São Paulo', 'nota': 3},
        {'texto': 'Palmeiras', 'nota': 1},
      ],
    },
    {
      'texto': 'Qual minha fruta preferida?',
      'respostas': [
        {'texto': 'Maça', 'nota': 10},
        {'texto': 'Laranja', 'nota': 2},
        {'texto': 'Banana', 'nota': 3},
        {'texto': 'Uva', 'nota': 1},
      ],
    }
  ];

  var pontuacaoTotal = 0;
  var questaoSelecionada = 0;

  void reiniciarQuestionario() {
    setState(() {
      pontuacaoTotal = 0;
      questaoSelecionada = 0;
    });
  }

  void responder(int pontuacao) {
    setState(() {
      pontuacaoTotal += pontuacao;
      questaoSelecionada++;
    });
    print(pontuacao);
  }

  bool get temPerguntaSelecionada {
    return questaoSelecionada < questoes.length;
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: Text('Questionário'),
        ),
        body: temPerguntaSelecionada
            ? Questionario(
                questoes: questoes,
                questaoSelecionada: questaoSelecionada,
                quandoResponder: responder,
              )
            : Resultado(pontuacaoTotal, reiniciarQuestionario),
      ),
    );
  }
}

class PrimeiroAPP extends StatefulWidget {
  PrimeiroAppState createState() {
    return PrimeiroAppState();
  }
}
