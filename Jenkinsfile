pipeline {
    environment {
        registry = "linea/dri_landing_page"
        registryCredential = 'Dockerhub'
        dockerImage = ''
    }
    agent any

    stages {
        stage('Building and push image') {
            when {
                expression {
                   env.BRANCH_NAME.toString().equals('master')
                }
            }
            steps {
              dir('wordpress') {
                script {
                    dockerImage = docker.build registry + ":$GIT_COMMIT"
                    docker.withRegistry( '', registryCredential ) {
                    dockerImage.push()
                    }
                    sh "docker rmi $registry:$GIT_COMMIT"
                }
            }
        }
    }
  }
}