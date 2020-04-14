# covidMaps
![](covidmap400.gif)

This project collects national Covid-19 infecxtion statistics and generates state maps with county by county data.  The output is in HTML suitable for integration into a website.

## Installation
### Requirements
  * macOS or Linux (Not tested on Windows)
  
  * Apache2 (any web server supporting PHOP should work)
  * PHP installed and configured with Apache2
  * Python 3.3+
  * SQLite 3.28+

### 

### Installing

1. Install the following Python modules:
  * requests 2.23.0
  * urllib3 1.25.8

```
     pip3 install requests urllib3
```

2. Create a directory to host the generated maps.
For this example, the website root will be used and maps placed in the COVID19 directory 

```
mkdir /Users/<username>/Sites/COVID19
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
