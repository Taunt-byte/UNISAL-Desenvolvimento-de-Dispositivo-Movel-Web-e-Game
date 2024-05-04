import 'package:flutter/material.dart';

class Dados extends StatefulWidget {
  @override
  _DadosState createState() => _DadosState();
}

class _DadosState extends State<Dados> {
  @override
  Widget build(BuildContext context) {
    return Center(
      child: Column(
        children: [
          Image.network(
              "https://cdn.w600.comps.canstockphoto.com/meio-sorrindo-envelhecido-feliz-banco-de-imagens_csp26900403.jpg"),
          Text("\nNome: Fulano de tal\nIdade: 35"),
        ],
      ),
    );
  }
}
