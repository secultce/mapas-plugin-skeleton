# mapas-plugin-skeleton
Estrutura padrão de diretórios e arquivos para criação de plugins para o Mapas de Culturas

## Índice

- [Visão Geral](#visão-geral)
- [Pré-requisitos](#pré-requisitos)
- [Como Usar](#como-usar)
- [Contribuição](#contribuição)
- [Licença de uso e desenvolvimento](#licença-de-uso-e-desenvolvimento)

## Visão Geral

Este projeto é um esqueleto para a criação de plugins para o Mapas de Cultura. Ele contém a estrutura de diretórios e arquivos necessários para a criação de um plugin.

Para compreeder melhor a estrutura de diretórios e arquivos, consulte a documentação do [Mapas Culturais](https://mapasculturais.gitbook.io/documentacao-para-desenvolvedores/formacao-para-desenvolvedores/plugins).

## Pré-requisitos

Ter o projeto [Mapa Cultura](https://github.com/secultce/mapacultural/tree/develop) instalado e rodando.

## Como Usar

Para usar este projeto, basta cloná-lo dentro da pasta **plungins (src/plugins)** e começar a desenvolver o seu plugin. 

```bash
# Exemplo de comando para clonar o projeto
git clone git@github.com:secultce/mapas-plugin-skeleton.git nome-do-seu-plugin

```
- Lembre-se de substituir "nome-do-seu-plugin" pelo nome que você dará ao seu plugin.
  
#### Após clonar o projeto, substitua os namespaces e nomes de arquivos para atender as necessidades do seu plugin.
- Para habilitar o plugin na aplicação é necessário colocá-lo no array de plugins habilitados na configuração da aplicação **(dev/config.d/plugins.php)** :

```bash
    'plugins' => [
        'MeuPlugin' => ['namespace' => 'MeuPlugin']
    ]
```

## Contribuição

Para contribuir com este projeto, siga as instruções do arquivo [CONTRIBUTING.md](CONTRIBUTING.md).

## Licença de Uso e desenvolvimento

Mapas Culturais é um software livre licenciado com [GPLv3](http://gplv3.fsf.org). 
