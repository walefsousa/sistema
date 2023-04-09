pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                script {
                    dockerapp = docker.build("walef/Sistema", ' -f ./dockerfile/Dockerfile ./dockerfile')        
                }
            }
        } 
    }
}