pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                script {
                    dockerapp = docker.build("walefsousa/sistem:${env.BIULD_ID}", ' -f ./docker/Dockerfile ./docker')        
                }
            }
        } 
    }
}  
