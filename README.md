####Simple example to run a Symfony 4 app in k8s using Minikube and Helm


###### Build and push the app image to a registry (Docker Hub in this example)

`composer install`

`docker build . -t  <your-docker-id>/k8s-symfony-example-app:0.1.0`

`docker push <your-docker-id>/k8s-symfony-example-app:0.1.0`


###### Install the app on Minikube using Helm

`helm install helm/k8s-symfony-example/ --name k8s-symfony-example`

######Get the app URL by running: 

`minikube service k8s-symfony-example --url`

