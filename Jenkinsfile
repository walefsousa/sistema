pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                script {
                    dockerapp = docker.build("walefsousa/sistema", ' -f ./imagemdocker/Dockerfile ./imagemdocker')        
                }
            }
        } 
    }
} 