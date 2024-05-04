import 'package:flutter/material.dart';
import 'package:warner/dados.dart';
import 'agenda.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Meu Primeiro APP - Flutter',
      home: DefaultTabController(
        length: 4,
        child: Scaffold(
          appBar: AppBar(
            bottom: TabBar(
              tabs: [
                Tab(
                  icon: Icon(Icons.person_pin_outlined),
                  text: 'Dados',
                ),
                Tab(
                  icon: Icon(Icons.calendar_today_rounded),
                  text: 'Agenda',
                ),
                Tab(
                  icon: Icon(Icons.free_breakfast_outlined),
                  text: 'Games',
                ),
                Tab(
                  icon: Icon(Icons.free_breakfast_outlined),
                  text: 'Suporte',
                ),
              ],
            ),
            title: Text('Meu Primeiro APP - Flutter'),
          ),
          body: TabBarView(
            children: [
              Dados(),
              Agenda(),
              Text('Games!'),
              Text('Suporte!'),
            ],
          ),
        ),
      ),
    );
  }
}
