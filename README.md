# Panaly - Project Analyzer - Symfony Dump Plugin

The plugin to the [Panaly Project Analyzer](https://github.com/DZunke/panaly) enables is a debugging reporting that
can be enabled to get the full result data as a plain symfony `dump` to the CLI. The function is delivered by the 
[Symfony VarDumper Component](https://symfony.com/doc/current/components/var_dumper.html). 
It is not recommended to be utilized as it is not that readable to have the full object structure of the result object. 

## Example Configuration

```yaml
# panaly.dist.yaml
plugins:
    DZunke\PanalySymfonyDump\SymfonyDumpPlugin: ~ # no options available

reporting:
    symfony_dump: ~ # No options needed, it is just a dump
```

## Thanks and License

**Panaly Project Analyzer - Symfony Dump Plugin** © 2024+, Denis Zunke. Released utilizing
the [MIT License](https://mit-license.org/).

> GitHub [@dzunke](https://github.com/DZunke) &nbsp;&middot;&nbsp;
> Twitter [@DZunke](https://twitter.com/DZunke)
